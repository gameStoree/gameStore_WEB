<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./carousel.css">

</head>


<div>
    <div><a class="inline-flex  items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent/75 hover:text-accent-foreground h-8 rounded-md px-3 pl-3 inline-flex items-center gap-x-2"
            type="button" href="/id/dashboard" style="outline: none;"><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true" class="h-4 w-4">
                <path fill-rule="evenodd"
                    d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z"
                    clip-rule="evenodd"></path>
            </svg><span>Dashboard</span></a></div>
    <div class="pb-16 pt-8 sm:pb-24">
        <div class="max-w-3xl space-y-8 divide-y divide-border">
            <div class="space-y-8 divide-y divide-border">
                <div class="space-y-6">

                    <div class="grid ">
                        <div class="">
                            <h3 class="text-base font-semibold leading-6 text-foreground">Profil</h3>
                            <p class="text-murky-200 mt-1 max-w-2xl text-sm">Informasi ini bersifat rahasia,
                                jadi berhati-hatilah dengan apa yang Anda bagikan.</p>
                        </div>
                        <div class=" my-2 justify-center items-center relative flex w-32 h-32">
                            <img src="{{ asset('admin/img/img/tesProfile.JPG') }}" alt="tesProfile"
                                class="object-cover w-full h-full rounded-full border-2 border-white">

                        </div>
                        <div class="w-32 justify-center items-center ">
                            <div class="justify-center items-center w-32 m-auto">
                                <button
                                    class="inline-flex items-center m-auto w-full justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3"
                                    type="button">Ganti Foto Profil
                                </button>
                            </div>
                        </div>


                    </div>
                    <form class="grid grid-cols-2 gap-4">
                        <div class="col-span-2"></div>
                        <div><label for="name"
                                class="block text-xs font-medium text-foreground pb-2">Nama Anda</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="text" id="name" autocomplete="name"
                                    placeholder="Nama Anda" name="name"></div>
                        </div>
                        <div><label for="username"
                                class="block text-xs font-medium text-foreground pb-2">ID USER</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="text" id="iduser" autocomplete="iduser" disabled=""
                                    placeholder="ID USER" name="iduser"></div>
                        </div>
                        <div class="col-span-2"><label for="email"
                                class="block text-xs font-medium text-foreground pb-2">Alamat Email</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="email" id="email" autocomplete="email"
                                    placeholder="Alamat Email" name="email"></div>
                        </div>
                        <div class="col-span-2"><label for="no"
                                class="block text-xs font-medium text-foreground pb-2">No.
                                Handphone</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="text" id="no" autocomplete="no"
                                    placeholder="No. Handphone" name="no"></div>
                        </div>
                        <div class=""><button
                                class="inline-flex items-center  justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3"
                                type="submit">Ubah Profil</button></div>
                    </form>
                </div>
                <div class="space-y-6">
                    <div class="pt-8">
                        <h3 class="text-base font-semibold leading-6 text-foreground">Ubah Kata Sandi</h3>
                        <p class="text-murky-200 mt-1 max-w-2xl text-sm">Pastikan Anda mengingat kata sandi
                            baru Anda sebelum mengubahnya.</p>
                    </div>
                    <form class="grid grid-cols-2 gap-4">
                        <div class="col-span-2"><label for="current-password"
                                class="block text-xs font-medium text-foreground pb-2">Kata Sandi Saat
                                Ini</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="password" id="current-password" autocomplete="current-password"
                                    placeholder="Kata Sandi Saat Ini" name="current-password"></div><span
                                class="text-xs text-destructive"></span>
                        </div>
                        <div><label for="new-password"
                                class="block text-xs font-medium text-foreground pb-2">Kata Sandi
                                Baru</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="password" id="new-password" autocomplete="new-password"
                                    placeholder="Kata Sandi Baru" name="new-password"></div><span
                                class="text-xs text-destructive"></span>
                        </div>
                        <div><label for="confirm-new-password"
                                class="block text-xs font-medium text-foreground pb-2">Konfirmasi Kata
                                Sandi Baru</label>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-white focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="password" id="confirm-new-password"
                                    autocomplete="confirm-new-password"
                                    placeholder="Konfirmasi Kata Sandi Baru" name="password-confirmation">
                            </div><span class="text-xs text-destructive"></span>
                        </div>
                        <div><button
                                class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3"
                                type="submit">Ubah Kata Sandi</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
