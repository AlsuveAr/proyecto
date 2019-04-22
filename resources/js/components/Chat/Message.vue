<template>
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>{{ message.user.name }}</small>    
    </div>
</template>

<script>
    export default {
    	props: ['message']
    };
</script>

<style >

.chat-message > p {

	min-width: 3em;
    max-width: 21em;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

	padding: 1ch 1.5ch;
    border-radius: .9ch;
    /*box-shadow: 0 1em 2em -.5em rgba(0, 0, 0, 0.35);*/
    box-shadow: 0.5em .6em 1.2em -.5em rgba(0, 0, 0, 0.35);
    background: #f5f5f5;
    color: black;
}
.chat-message {
	margin-left: 1rem;
	margin-bottom: 0;
}


.chat-message > p {
	margin-bottom: 0;
}
.chat-message > small {

	font-size: .7rem;
}
</style>