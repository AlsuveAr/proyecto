<template>
    <div class="chat-inputs">
        <input type="text" class="form-control" 
            placeholder="Escribe tu mensaje ..." 
            v-model="messageText"
            @keyup.enter="sendMessage"
            @keydown="actionUser">
        <button class="btn btn-primary" @click="sendMessage">Enviar</button>    
    </div>
</template>

<script>
    export default {

        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name: $('.ml-auto #navbarDropdown').text()
                    }
                });
                this.messageText = '';
            },
            actionUser() {
                this.$emit('actionUser', {
                    user: {
                        name: $('.ml-auto #navbarDropdown').text()
                    }
                });
            }
        }
    };
</script>

<style type="text/css">
.chat-inputs {
	display: flex;
}

.chat-inputs input {
	flex: 1 auto;
	height: 100%;
	border-radius: 0;
}

.chat-inputs button {
	border-radius: 0;
}
</style>
