<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ATTENZIONE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Sei sicuro di voler cancellare questo studente?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('students.destroy', $student) }}" method="Post" class="delete-form ms-2"
                    data-name="{{ $student->first_name }}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
            </div>
        </div>
    </div>
</div>
