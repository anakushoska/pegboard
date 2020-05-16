<template>
<div>


                <label>Figure <span class="text-danger">*</span></label>
                <select  name="figure_id" id="figure_id" class="form-control"
                        v-model="figureId">
                    <option v-for="figure in figures" v-bind:value="figure.id">
                        {{ figure.name }}
                    </option>
                </select>

                <div v-if="figureId === 1">
                    <label>Level <span class="text-danger">*</span></label>
                    <select name="level_id" id="level_id" class="form-control" v-model="levelId">
                        <option v-for="l in levels " v-bind:value="l.id">
                            {{ l.name }}
                        </option>
                    </select>

                </div>

</div>

</template>

<script>

    module.exports = {
        props: ["figures", "levels"],
        data: function() {
            return {
                figureId: "",
                target:"",
                levelId:"",
                figure: '',
                shape: '',
                shapeId:''
            }
        },

        methods: {

            // submitForm() {
            //     alert("gigo");

            // }
        }




    }
</script>
