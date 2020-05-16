@extends('dashboard.results.index')

@section('contentgame')
                        <form role="form" method="post"
                            action="{{isset($result)?route('resultDetails.update',$result->id):route('result.details.store', $game->id)}}">
                                @if(isset($result))
                                    {{ method_field("PUT") }}
                                @endif

                                @csrf

                                    <path-finder-component
                                    v-bind:figures='@json($figures)'
                                    v-bind:levels='@json($levels)'
                                    >
                                    </path-finder-component>

                                <div class="form-group">
                                    <label for="total_time">Time (s)</label>
                                    <input type="number" class="form-control" id="time" name="time"
                                        placeholder="Total time"
                                        value="{{isset($result)?$result->total_time:''}}">
                                </div>

                                <div class="form-group">
                                    <label for="used_figures">Success Rate</label>
                                    <input type="number" class="form-control" id="success_rate" name="success_rate"
                                        placeholder="Used figures"
                                        value="{{isset($result)?$result->used_figures:''}}">
                                </div>

                                <div class="form-group">
                                        <label for="used_figures">Used figures</label>
                                        <input type="number" class="form-control" id="used" name="used"
                                            placeholder="Used figures"
                                            value="{{isset($result)?$result->used_figures:''}}">
                                </div>

                            <div class="col-md-12 px-5 mt-3 text-right">
                                    <a href="{{route('patients.index')}}" class="mr-2 text-dark">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit game</button>

                            </div>

                        </form>

@endsection



