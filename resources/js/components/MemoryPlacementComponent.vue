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
                    <input type="hidden" id="target" name="target" v-if="levelId === 1" value="3" >
                    <input type="hidden" id="target" name="target" v-if="levelId === 2" value="4" >
                    <input type="hidden" id="target" name="target"  v-if="levelId === 3" value="5" >
                </div>

                <div class="form-group" v-if="figureId === 2">
                    <label>Level <span class="text-danger">*</span></label>
                    <select name="level_id" id="level_id" class="form-control" v-model="levelId">
                        <option v-for="l in levels " v-bind:value="l.id">
                            {{ l.name }}
                        </option>
                    </select>
                    <input type="hidden" id="target" name="target" v-if="levelId === 1" value="2" >
                    <input type="hidden" id="target" name="target" v-if="levelId === 2" value="3" >
                    <input type="hidden" id="target" name="target" v-if="levelId === 3" value="4" >
                </div>

                <div class="form-group" v-if="figureId === 3">
                    <label>Level <span class="text-danger">*</span></label>
                    <select name="level_id" id="level_id" class="form-control" v-model="levelId">
                        <option v-bind:value="1">Level 1 </option>
                        <option v-bind:value="2">Level 2 </option>
                    </select>
                    <input type="hidden" id="target" name="target" v-if="levelId === 1" value="3" >
                    <input type="hidden" id="target" name="target" v-if="levelId === 2" value="5" >
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
