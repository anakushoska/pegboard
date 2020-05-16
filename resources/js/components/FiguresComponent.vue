<template>
    <select name="figure_id" id="figure_id" class="form-control"
            v-model="figureId" @change.prevent="submitForm()">
        <option v-for="f in figures" v-bind:value="f.id">
            {{ f.name }}
        </option>
    </select>
</template>

<script>
    module.exports = {
        props: ["figures", "currentFigureId"],
        data: function() {
            return {
                figureId: this.currentFigureId,
            }
        },
        methods:{
            submitForm(){
                console.log('ana');
            }
        }
    }
</script>
