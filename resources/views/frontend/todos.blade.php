@include('frontend.templates.meta')
@include('frontend.templates.loader')
@include('frontend.templates.header')

<main>

	<div class="applic-apps section-padding2">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-8 offset-md-2">
                    <div id="todos">
                        @foreach( $todos as $todo )

                        <?php
                            if( $todo->is_colpleted == 1 ){
                                $backgroundColod = "background-color: #D4EDDA;";
                                $status = "Completed";
                            }else{
                                $backgroundColod = "background-color: #D9D9D9;";
                                $status = 'Not Completed';
                            }
                        ?>


                        <div class="row mt-3" style="<?php echo($backgroundColod) ?>; padding:1em 0.5em">
                            <div class="col-md-12">
                                {{ $todo->id }} - {{ $todo->todo_body }}  
                                <span style="padding-left:4em;">
                                    {{ $status }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>


@include('frontend.templates.footer')
