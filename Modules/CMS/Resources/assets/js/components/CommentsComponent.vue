<template>
    <div>
        <hr/>
            <div class="comment-form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" v-model="comment.username" class="form-control" rows="3" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" v-model="comment.comment" rows="3"></textarea>
                </div>
                <button v-on:click="submitComment()" class="btn btn-primary">Comment</button>
            </div>
        <hr>
        <div v-for="c in comments" :key = "c.id"> 
            <div class="media">
                <img class="mr-3" src="https://via.placeholder.com/64" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0">{{c.username}} - {{c.created_at}}</h5>
                    {{c.comment}}
                </div>
            </div>
            <hr/>
        </div>
    </div>
</template>

<script> 
    import axiso from 'axios';
    export default {
        mounted() {
            //comment.page_id =  this._props.getPageId();
            this.getComments();
        },
        props: ['page_id'],
        data(){
            return {
                comments:[],
                comment: {
                    username:'',
                    post_id:'',
                    user_id:'',
                    comment:''
                }
            }
        },
        methods: {
            submitComment: function() {
                this.comment.post_id = this.page_id;
                this.comment.user_id = 0;
                axiso.post('/api/comments/store',this.comment).then(response =>{
                    this.comments = response.data;
                    if(response.data.length){
                        this.comment.comment = '';
                    }
                })
            },  
            getComments: function(event) {
                axiso.get('/api/comments/all/'+this.page_id).then((response)=>{
                    this.comments = response.data;
                });
            }
        }
    }
</script>
  