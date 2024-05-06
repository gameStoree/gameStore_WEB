@extends('worker.layout')

@section('conten')
    <div class="col-xl-6">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
        </div> --}}
            <div class="card-body">
                <form id="searchForm" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">ID ML</label>
                        <input type="text" class="form-control" id="basic-default-company" name="id_ml" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Server</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" name="zone" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
        <div id="result"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchForm").submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman form default

                var idMl = $("#basic-default-company").val();
                var server = $("#basic-default-email").val();

                $.ajax({
                    url: "https://api.isan.eu.org/nickname/ml",
                    method: "GET",
                    data: {
                        id: idMl,
                        zone: server
                    },
                    success: function(result) {
                        // Manipulasi data JSON untuk menghilangkan status dan game
                        var cleanedResult = {
                            id: result.id,
                            zoneId: result.zoneId,
                            name: result.name
                        };

                        // Tampilkan hasil yang telah dibersihkan
                        $("#result").html(JSON.stringify(cleanedResult));
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    @include('sweetalert::alert')
@endsection
