<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">To Do Table</h6>

        </div>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}

                        <th scope="col">Note</th>


                    </tr>
                </thead>
                <tbody>
                   @foreach ($mes as $item)
                    <tr>
                     <td>{{$item->todo}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- blood_doners -->
