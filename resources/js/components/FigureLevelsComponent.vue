<template>

                            <div class="card-body">
                                    <div class="row">
                                                <div class="col-6">

                                                        <div class="form-group" v-if="figures.length > 1">
                                                                <label>Figure <span class="text-danger">*</span></label>
                                                                <select  name="figure_id" id="figure_id" class="form-control"
                                                                        v-model="figureId" @change="filterFigureLevels()">
                                                                    <option v-for="figure in figures" v-bind:value="figure.id">
                                                                        {{ figure.name }}
                                                                    </option>
                                                                </select>
                                                        </div>

                                                        <div class="form-group" v-if="filteredFigureLevels.length > 1">
                                                            <label>Level <span class="text-danger">*</span></label>
                                                            <select name="level" id="level" class="form-control" v-model=selectedFigureLevel>
                                                                <option v-for="selectedFigureLevel in filteredFigureLevels" v-bind:value="{name:selectedFigureLevel.name, number_of_pegs:selectedFigureLevel.number_of_pegs, level:selectedFigureLevel.level, target:selectedFigureLevel.target}">
                                                                    {{ selectedFigureLevel.level }} ( {{selectedFigureLevel.target}} )
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group" v-if="childrenGames.length > 0">
                                                            <label>Training type</label>
                                                            <select class="form-control" name="game" id="game" v-model=childGame >
                                                                <option v-for="childGame in childrenGames" v-bind:value="{id:childGame.id, name:childGame.name, training_type:childGame.training_type, target:childGame.target}">
                                                                        {{ childGame.training_type }} ( {{childGame.target}} )
                                                                </option>
                                                            </select>
                                                        </div>



                                                        <div v-if="selectedFigureLevel">
                                                            <input   type="hidden" id="target" name="target" v-bind:value="selectedFigureLevel.target">
                                                            <input  type="hidden" id="level_id" name="level_id" v-bind:value="selectedFigureLevel.level">
                                                        </div>
                                                        <div v-else>
                                                              <input  type="hidden" id="target" name="target"  v-bind:value="target">
                                                        </div>






                                                        <div v-if="childGame">
                                                            <input  type="hidden" id="target" name="target" v-bind:value="childGame.target" >
                                                            <input  type="hidden" id="game_id" name="game_id" v-bind:value="childGame.id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="time">Total time (s)</label>
                                                            <input type="number" min="0" class="form-control" id="time" name="time"
                                                                placeholder="Length of training after the bell sounds"
                                                                v-model="time" @change="updateAvgTime()">
                                                        </div>

                                                        <div class="form-group" v-if="game.id === 1 || game.id === 26 || game.id === 27">
                                                                <label for="used_figures">Used</label>
                                                                <input type="number" min="0" class="form-control" id="used" name="used"
                                                                    placeholder="Number of pegs placed upon completion of training"
                                                                    v-model="used" @change="updateAvgTime()">
                                                        </div>

                                                        <div class="form-group" v-if="game.id === 26 || game.id === 27">
                                                                <label for="used_figures">Success</label>
                                                                    <input type="number" step="0.01" min="0"  class="form-control" id="success" name="success"
                                                                        placeholder="Success"
                                                                        v-model="success">
                                                        </div>

                                                        <div class="form-group" v-if="game.id === 1">
                                                                <label for="avrage_time">Average time (s)</label>
                                                                <input type="number" step="0.01" min="0" class="form-control" id="avg_time" name="avg_time"
                                                                    placeholder="Length of time needed for each peg"
                                                                    v-model="avg_time" disabled>
                                                        </div>

                                                        <div v-if="game.id !== 1 && game.id !== 26 && game.id !== 27">
                                                            <div class="form-group">
                                                                <label for="completed">Correct</label>
                                                                <input type="number" min="0" class="form-control" id="correct" name="correct"
                                                                    placeholder="Number of correctly placed pegs" @change="updateSuccessRate();updateAvgTime()"
                                                                    v-model="correct">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="incorrect">Incorrect</label>
                                                                <input type="number" min="0" class="form-control" id="incorrect" name="incorrect"
                                                                    placeholder="Number of incorrectly placed pegs" @change="updateAvgTime()"
                                                                    v-model="incorrect">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="used_figures">Success Rate (%)</label>
                                                                <input type="number" step="0.01" min="0"  class="form-control" id="success_rate" name="success_rate"
                                                                    placeholder="Success rate"
                                                                    v-model="success_rate" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                    <label for="avrage_time">Average time (s)</label>
                                                                    <input type="number" step="0.01" min="0" class="form-control" id="avg_time" name="avg_time"
                                                                        placeholder="Length of time needed for each peg"
                                                                        v-model="avg_time" disabled>
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="col-4">
                                                    <div class="card" style="width: 18rem;">
                                                                <div v-if="figureId">
                                                                    <p v-if="figureId === 1">
                                                                        <img class="card-img-top" v-bind:src="'/img/peg.png'" alt="Card image cap">
                                                                    </p>
                                                                    <p v-if="figureId === 2">
                                                                        <img class="card-img-top" v-bind:src="'/img/shape.png'" alt="Card image cap">
                                                                    </p>
                                                                    <p v-if="figureId === 3">
                                                                        <img class="card-img-top" v-bind:src="'/img/pinch.png'" alt="Card image cap">
                                                                    </p>
                                                                </div>
                                                                <div v-else>
                                                                      <p v-if="figureLevels[0].figure_id === 1">
                                                                        <img class="card-img-top" v-bind:src="'/img/peg.png'" alt="Card image cap">
                                                                    </p>
                                                                       <p v-if="figureLevels[0].figure_id === 2">
                                                                        <img class="card-img-top" v-bind:src="'/img/shape.png'" alt="Card image cap">
                                                                    </p>
                                                                    <p v-if="figureLevels[0].figure_id === 3">
                                                                        <img class="card-img-top" v-bind:src="'/img/pinch.png'" alt="Card image cap">
                                                                    </p>
                                                                </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">{{game.name}}</h5>
                                                                <p class="card-text">
                                                                    {{game.description}}</p>
                                                            </div>
                                                            <div v-if="figure">
                                                                  <ul class="list-group list-group-flush" style="color: orange;">
                                                                        <li class="list-group-item" style></li>
                                                                        <li class="list-group-item">Figure type: {{figure.name }}</li>
                                                                        <li class="list-group-item">Number of pegs: {{figure.number_of_pegs}}</li>
                                                                    </ul>
                                                            </div>
                                                               <div v-else>
                                                                <ul class="list-group list-group-flush" style="color: orange;">
                                                                    <li class="list-group-item" style></li>
                                                                    <li class="list-group-item">Figure type: {{figureLevels[0].name }}</li>
                                                                    <li class="list-group-item">Number of pegs: {{figureLevels[0].number_of_pegs}}</li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                        </div>
                                </div>



</template>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.js"></script>

<script>


    module.exports = {
        props: ["figureLevels","childrenGames", "game", "figures"],
        data: function() {
            return {
                figure:"",
                figureId:"",
                figureLevels:this.figureLevels,
                filteredFigureLevels:"",
                selectedFigureLevel:"",
                childrenGames:this.childrenGames,
                childGame:"",
                time:"",
                used:"",
                correct:"",
                incorrect:"",
                avg_time:"",
                success_rate:"",
                success:"",
                index: 0,
                target:""
            }
        },



        methods: {

            // setUsed() {
            //     this.used=parseInt(this.correct) + parseInt(this.incorrect);
            // },
            updateAvgTime(){
                    if (this.used){
                        this.avg_time=this.time / this.used;
                    }
                    if (this.correct){
                        this.avg_time=this.time / this.correct;
                    }
                },
            filterFigureLevels(){

                let filteredFigureLevels=[];

                for(var i =0; i < this.figureLevels.length; i++) {
                    if(this.figureLevels[i].figure_id === this.figureId) {

                    filteredFigureLevels.push(this.figureLevels[i])
                }
                }
                    if(filteredFigureLevels.length === 1){
                        this.target=filteredFigureLevels[0].target
                    }
                this.filteredFigureLevels=filteredFigureLevels;


            },
            updateSuccessRate(){
                  if(this.childGame) {
                    this.success_rate=this.correct / this.childGame.target;
                  }
                  if(this.selectedFigureLevel){
                    this.success_rate=this.correct / this.selectedFigureLevel.target;
                  }
                  if(this.target){
                        this.success_rate=this.correct / this.target;
                  }
                },
            // submitForm() {

            //     const postData = {figure: this.figure, selectedFigureLevel: this.selectedFigureLevel };
            //            $.ajax({
            //             url: "/games/" + this.game.id + "/results",
            //             type: 'POST',
            //             data: postData,
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             dataType: 'json',
            //             success: function (res) {

            //            console.log(res);

            //                 // window.location.href = "/ticketorders/" + res.ticketOrderId + "/payments/create";

            //                 // redirect user to another page (payment view)


            //                 // window.location.href ili takoj neshto (cist javascript) nosi do order view (shopping cart view)
            //                 // kreirash route /cart koja nosi na TicketOrderController negde
            //                     // Find ticket order id from session $ticketOrderId = ($request->session()->get("ticket_order_id"))
            //                     // $totalToPay = $ticketOrderId->total
            //                     // Create a payment intent (suma, currency) - vidi u stripe dokumentaciju
            //                     // return payment.blade.php blade with payment intent secret (clientSecret) (check stripe docs)
            //                     //
            //             },
            //             error: function(error){
            //                 console.log();
            //             }
            //         });

            //         }




  }
}

</script>
