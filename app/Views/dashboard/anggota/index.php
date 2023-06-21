<?php include APPPATH . 'Views/dashboard/header.php'; ?>

<div class="container">
    <?php include APPPATH . 'Views/dashboard/sidebar.php'; ?>
    <div class="content" id="content">
        <h1>Anggota</h1>
        <p>Selamat datang di halaman Anggota</p>
    </div>
</div>


<script>
	document.addEventListener("DOMContentLoaded", _ => {
		// get query string as message
		const urlParams = new URLSearchParams(window.location.search);
		const message = urlParams.get('message');
		
		if (message) {
			Swal.fire({
				icon: 'success',
				title: 'Berhasil',
				text: message,
			})
			.then(({ isDismissed, isConfirmed }) => {
				if(isDismissed || isConfirmed) {
					window.history.pushState('', '', window.location.toString().split('?')[0] + '?');
				}
			})
		}
	})
</script>

<?php include APPPATH . 'Views/dashboard/footer.php'; ?>