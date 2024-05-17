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
                        <label class="form-label" for="basic-default-nickname">ID ML (Zone)</label>
                        <input type="text" class="form-control" id="id_zone" name="nickname" />
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
                event.preventDefault();

                var nickname = $("#id_zone").val();
                var parts = nickname.split("(");
                var idMl = parts[0];
                var zone = parts[1].replace(")", ""); // Hapus tanda kurung tutup

                $.ajax({
                    url: "https://api.isan.eu.org/nickname/ml",
                    method: "GET",
                    data: {
                        id: idMl,
                        zone: zone
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
