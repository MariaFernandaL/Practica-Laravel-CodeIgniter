const deleteBtn = document.getElementById('delete-button');

deleteBtn.addEventListener('submit', (e)=>{

    e.preventDefault();

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            deleteBtn.submit();
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            }
      })

})