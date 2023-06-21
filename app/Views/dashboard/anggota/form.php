<?php include APPPATH . 'Views/dashboard/header.php'; ?>

<div class="container">
	<?php include APPPATH . 'Views/dashboard/sidebar.php'; ?>
	<div class="content" id="content">
		<form action="<?= base_url("dashboard/anggota/store") ?>" method="post">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nama</label>
				<input type="nama" name="nama" class="form-control" id="exampleFormControlInput1">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">No Telephone</label>
				<input type="tel" name="telepon" class="form-control" id="exampleFormControlInput1">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
				<input type="tel" name="email" class="form-control" id="exampleFormControlInput1">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button class="btn btn-primary px-5 py-2 ms-auto d-block">Save</button>
		</form>
	</div>
</div>

<?php include APPPATH . 'Views/dashboard/footer.php'; ?>


<script>
	document.addEventListener("DOMContentLoaded", _ => {
		const form = document.querySelector("form");

		form.addEventListener("submit", async e => {
			e.preventDefault();
			const formData = new FormData(form);

			try {
				const raw = await fetch(form.action, {
					method: "POST",
					body: formData
				})
				if (raw.status > 201) throw new Error("Gagal menambahkan anggota");
				const res = await raw.json()
				window.location.href = `<?= base_url("dashboard/anggota") ?>?message=${res.message}`
			} catch (er) {
				Swal.fire({
					icon: 'error',
					title: 'error',
					text: 'Gagal menambahkan anggota',
				})
			}
		})
	})
</script>