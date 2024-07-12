<html>

<head>
  <style>
    body {
      background-color: #E7F0DC;
    }
  </style>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Lexend%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title> Admin TK Yayasan Beribu</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex size-full min-h-screen flex-col bg-[#f8fafb] group/design-root overflow-x-hidden" style='font-family: Lexend, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e8eef3] px-10 py-3">
        <div class="flex items-center gap-4 text-[#0e161b]">
          <div class="size-4">

          </div>
          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-14" style='background-image: url("http://localhost:8080/img/logo_tk.png");'></div>

          <h2 class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]" style="margin-top: 10px; color: #597445 ;">Admin TK Yayasan Beribu</h2>

        </div>
        <div class="flex flex-1 justify-end gap-8">
          <div class="flex items-center gap-9">
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_kelas') ?>">Kelas</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_siswa') ?>">Siswa</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_guru') ?>">Guru</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_kegiatan') ?>">Kegiatan</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_jadwal') ?>">Jadwal</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_pencapaian') ?>">Pencapaian</a>
            <a class="text-[#597445] text-sm font-medium leading-normal" href="<?= base_url('/admin/data_administrasi') ?>">Administrasi</a>
          </div>
        </div>
      </header>
</body>