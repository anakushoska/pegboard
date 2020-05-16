<template>
<div>

                <div class="form-group">
                    <label>Figure <span class="text-danger">*</span></label>
                    <select  name="figure_id" id="figure_id" class="form-control"
                            v-model="figureId">

                        <option v-for="figure in figuresOneThree" v-bind:value="figure.id">
                            {{ figure.name }}
                        </option>
                    </select>
                </div>

                <div class="form-group" v-if="figureId === 1">
                    <label>Training type <span class="text-danger">*</span></label>
                    <select name="shape_id" id="shape_id" class="form-control" v-model=shape>

                        <option v-for="s in shapesFigureOne" v-bind:value="s.id">
                            {{ s.name }}
                        </option>
                    </select>
                </div>

                 <div class="form-group" v-if="figureId === 3">
                    <label>Training type <span class="text-danger">*</span></label>
                    <select name="shape_id" id="shape_id" class="form-control" v-model=shape>

                        <option v-for="s in shapesFigureTwo" v-bind:value="s.id">
                            {{ s.name }}
                        </option>
                    </select>
                </div>




</div>

</template>

<script>

    module.exports = {
        props: ["figuresOneThree", "shapesFigureOne", "shapesFigureTwo" ],
        data: function() {
            return {
                figureId: "",
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
