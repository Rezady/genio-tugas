<!-- Modal Add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- form input -->
                <form method="post" action="/inputstaff">
                    {{ csrf_field() }}
                    @yield('modalAdd')                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>            
        </div>
    </div>
</div>

