<template>
    <div class="container">
        <hr>
        <div class="row">
        	<div class="col-sm-12">
        		<textarea rows="10" class="form-control" readonly>{{ messages.join('\n') }}</textarea>
        		<hr>
                <span v-if="isActive">{{ isActive.name }} esta escribiendo...</span>
        		<input type="text" class="form-control" 
                    v-model="textMessage" 
                    @keyup.enter="sendMessage"
                    @keydown="actionUser">
        	</div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['room', 'user'],
    	data() {
    		return {
    			messages: [],
    			textMessage: '',
                isActive: false,
                typingTimer:false 
    		}
    	},
        computed: {
            channel() {
                return window.Echo.private('room.' + this.room.id);
            }
        },
        mounted() {
            this.channel
    			.listen('PrivateMessage', ({data}) => {
    				this.messages.push(data.body);
                    this.isActive = false;
    			})
                .listenForWhisper('typing', (e) => {
                    this.isActive = e;

                    if (this.typingTimer) clearTimeout(this.typingTimer);

                    this.typingTimer = setTimeout(() => {
                        this.isActive = false;
                    }, 2000);
                });
        },
        methods: {
        	sendMessage() {
        		axios.post('/private-messages', {body: this.textMessage, room_id: this.room.id });

        		this.messages.push(this.textMessage); 

        		this.textMessage = '';
        	},
            actionUser() {
                this.channel
                    .whisper('typing', {
                        name: this.user.name
                    });
            }
        }
    }
</script>