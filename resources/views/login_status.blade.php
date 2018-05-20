@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
				<!--
                    @if (session('status'))
						log in first!
						
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
						
                    @endif
                 
                    You are logged in!
					-->
					@if (Route::has('login'))

                   <div class="top-right links">
                  
                         @if (Auth::check())
                       
                         <h1>You are logged in!</h1>
                 
                      @else
                             <p> ---you are not logged in---</p>
                             <h1>you need to log in first!</h1>
         
                        @endif
        
                       </div>
   
                    @endif
					
                </div>
			
            </div>
		
        </div>
				
	
    </div>
</div>


@endsection

