            @if ( count ( $errors ) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ( $errors->all() as $error )
                        <span>{{$error}}</span>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
