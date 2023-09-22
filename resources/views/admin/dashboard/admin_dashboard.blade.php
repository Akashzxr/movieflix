            @extends('layouts.admin')
            @section('content')
            <div class="cardBox">
                <div class="card">
                    <div class="cardDetails">
                        <div class="numbers">{{ $usercount }}</div>
                        <div class="cardName">Users</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="cardDetails">
                        <div class="numbers">{{ $moviecount }}</div>
                        <div class="cardName">Movies</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="film-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="cardDetails">
                        <div class="numbers">{{ $reviewcount }}</div>
                        <div class="cardName">Reviews</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="create-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="cardDetails">
                        <div class="numbers">{{ $genrecount }}</div>
                        <div class="cardName">Genre</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
                    </div>
                </div>
            </div>
            @endsection
