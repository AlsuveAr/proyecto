<template>
	<div class="chat-messages" id="chat-messages">
		<br>
        <!--Seccion si no hay mensajes-->
        <div class="empty" v-show="messages.length === 0">
            No hay mensajes aun!
            <small>Seccion para colocar informacion de politicas de la plataforma asi como otros datos</small>
        </div>
        <!--Renderizacion de los mensajes-->
    	<chat-message v-for="message in messages" 
            :message="message" 
            :key="message.id"></chat-message>
        
        <!--Seccion de estado en tiempo real que muestra la accion del otro usuario-->
        <span v-if="isActive">{{ isActive.name }} Escribiendo ...</span>
	</div>
</template>

<script>
    export default {
        props: ['messages', 'isActive']
    };
    var elemento = $('#chat-messages');
</script>

<style type="text/css">
.chat-messages {
    overflow: auto;
}

.empty {
	padding: 1rem;
	text-align: center;
}
.chat-message {
    position: relative;
    
}

.chat-messages span {
    background-position: bottom;
    top: 80vh;
    background-color: white;
    color: black;
}
</style>