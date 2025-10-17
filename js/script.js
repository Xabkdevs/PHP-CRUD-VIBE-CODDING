$(document).ready(function() {
    // Function to show toast messages
    function showToast(response) {
        let message = typeof response === 'object' && response !== null && response.message ? response.message : response;
        $('#liveToast .toast-body').text(message);
        const toastLiveExample = document.getElementById('liveToast');
        const toast = new bootstrap.Toast(toastLiveExample);
        toast.show();
    }

    // Function to load records
    function loadRecords() {
        $.ajax({
            url: 'api.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let tbody = $('#crudTable tbody');
                tbody.empty();
                data.forEach(function(record) {
                    tbody.append(`
                        <tr>
                            <td>${record.id}</td>
                            <td>${record.first_name}</td>
                            <td>${record.last_name}</td>
                            <td>${record.phone}</td>
                            <td>${record.store}</td>
                            <td>${record.unikey}</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" 
                                    data-id="${record.id}" 
                                    data-first_name="${record.first_name}" 
                                    data-last_name="${record.last_name}" 
                                    data-phone="${record.phone}" 
                                    data-store="${record.store}" 
                                    data-unikey="${record.unikey}">Edit</button>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="${record.id}">Delete</button>
                            </td>
                        </tr>
                    `);
                });
            }
        });
    }

    // Initial load of records
    loadRecords();

    // Create Record
    $('#createForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'api.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                showToast(response);
                $('#createForm')[0].reset();
                loadRecords();
            }
        });
    });

    // Edit Button Click - Populate Modal
    $(document).on('click', '.edit-btn', function() {
        let id = $(this).data('id');
        let first_name = $(this).data('first_name');
        let last_name = $(this).data('last_name');
        let phone = $(this).data('phone');
        let store = $(this).data('store');
        let unikey = $(this).data('unikey');

        $('#editId').val(id);
        $('#editFirstName').val(first_name);
        $('#editLastName').val(last_name);
        $('#editPhone').val(phone);
        $('#editStore').val(store);
        $('#editUnikey').val(unikey);
        
        let editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();
    });

    // Update Record
    $('#editForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'api.php',
            type: 'PUT',
            data: $(this).serialize(),
            success: function(response) {
                showToast(response);
                let editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
                editModal.hide();
                loadRecords();
            }
        });
    });

    // Delete Record
    $(document).on('click', '.delete-btn', function() {
        let id = $(this).data('id');
        if (confirm('Are you sure you want to delete this record?')) {
            $.ajax({
                url: 'api.php',
                type: 'DELETE',
                data: { id: id },
                success: function(response) {
                    showToast(response);
                    loadRecords();
                }
            });
        }
    });
});