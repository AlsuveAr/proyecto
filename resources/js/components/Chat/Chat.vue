<template>
    <div class="chat">
        <chat-messages :messages="messages" :isActive="isActive"></chat-messages>
        <chat-inputs @messagesent="addMessage" @actionUser="actionUser"></chat-inputs>
    </div>
</template>

<script>

export default {
    props: ['room', 'user'],
    data() {
        return {
            messages: [],
            isActive: false,
            typingTimer: false
        }
    },
    computed: {
        channel() {
            return window.Echo.private('room.' + this.room);
        }
    },
    mounted() {
        axios.get('/api/messages').then(response => {
            this.messages = response.data;
            
        });
        
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
        addMessage (message) {
            //Almacenar en la base de datos
            axios.post('/messages', message);
            //Disparar el evento
            axios.post('/api/messages', {body: message, room_id: this.room });
            
            //Añadir a mensajes existentes
            this.messages.push(message);
        },
        actionUser() {
            console.log('Disparado' + this.user.name)
            this.channel
                .whisper('typing', {
                    name: this.user.name
                });
        }
    }
};
</script>

<style lang="scss">
.chat-messages {
	position: relative;
	height: 90%;
	overflow: active;
}
.chat-inputs {
	position: relative;
	height: 10%;
}

</style>
