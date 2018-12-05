<template>
    <div class="comment-form">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button v-on:click="greet" class="btn btn-primary">Comment</button>
    </div>
</template>

<script> 
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            greet: function(event) {
                alert("Hello")
            }
        }
    }
</script>
  