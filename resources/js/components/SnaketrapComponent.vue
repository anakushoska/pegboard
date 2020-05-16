<template>
<div>

                <div class="form-group">
                    <label>Figure <span class="text-danger">*</span></label>
                    <select  name="figure_id" id="figure_id" class="form-control"
                            v-model="figureId">
                        <option v-for="figure in figures" v-bind:value="figure.id">
                            {{ figure.name }}
                        </option>
                    </select>
                </div>

                <div class="form-group" v-if="figureId === 1">
                    <label>Level <span class="text-danger">*</span></label>
                    <select name="level_id" id="level_id" class="form-control" v-model="levelId">
                        <option v-for="l in levels " v-bind:value="l.id">
                            {{ l.name }}
                        </option>
                    </select>
                </div>
                        <input type="hidden" id="target" name="target" v-if="levelId === 1" value="10" >
                        <input type="hidden" id="target" name="target" v-if="levelId === 2" value="15" >
                        <input type="hidden" id="target" name="target" v-if="levelId === 3" value="20" >


                 <div v-if="figureId === 2" >
                           <input type="hidden" id="target" name="target" value="10" >
                </div>

                  <div v-if="figureId === 3" >
                           <input type="hidden" id="target" name="target" value="15" >
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
