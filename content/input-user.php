<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-fluid ">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <div class="container">
                            <center>
                                <h1 class="menu-title">INPUT DATA</h1>
                            </center>
                            <!-- Dashboard content here -->
                            <form action="">
                                <div class="form-group">
                                    <label for="inputKecamatan"
                                        class="breadcrumb-item text-gray-600 fw-bold lh-1 menu-title">Kecamatan</label>
                                    <select class="form-control select2" id="inputKecamatan">
                                        <option value="Wonosari">Wonosari</option>
                                        <option value="Nglipar">Nglipar</option>
                                        <option value="Playen">Playen</option>
                                        <option value="Patuk">Patuk</option>
                                        <option value="Paliyan">Paliyan</option>
                                        <option value="Wonosari">Panggang</option>
                                        <option value="Nglipar">Tepus</option>
                                        <option value="Playen">Semanu</option>
                                        <option value="Patuk">Karangmojo</option>
                                        <option value="Paliyan">Ponjong</option>
                                        <option value="Paliyan">Rongkop</option>
                                        <option value="Wonosari">Semin</option>
                                        <option value="Nglipar">Ngawen</option>
                                        <option value="Playen">Gedangsari</option>
                                        <option value="Patuk">Saptosari</option>
                                        <option value="Paliyan">Girisubo</option>
                                        <option value="Patuk">Tanjungsari</option>
                                        <option value="Paliyan">Purwosari</option>
                                    </select>
                                </div>
                                <div class="form-group" id="desaForm">
                                    <br>
                                    <label for="inputDesa"
                                        class="breadcrumb-item text-gray-600 fw-bold lh-1 menu-title">Desa</label>
                                    <select class="form-control select2" id="inputDesa">
                                        <!-- Options will be dynamically added here based on selection -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <p class="breadcrumb-item text-gray-600 fw-bold lh-1">No TPS</p>
                                    <input class="form-control " type="text" placeholder="No TPS">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <p class="breadcrumb-item text-gray-600 fw-bold lh-1">Nama Saksi
                                    </p>
                                    <input class="form-control" type="text" placeholder="Nama Saksi">
                                </div>

                                <div class="form-group">
                                    <br>
                                    <p class="breadcrumb-item text-gray-600 fw-bold lh-1">Cagub 1
                                    </p>
                                    <input class="form-control" type="text" placeholder="Suara SAH">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <p class="breadcrumb-item text-gray-600 fw-bold lh-1">Cagub 2
                                    </p>
                                    <input class="form-control" type="text" placeholder="Suara SAH">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <p class="breadcrumb-item text-gray-600 fw-bold lh-1">Cagub 3
                                    </p>
                                    <input class="form-control" type="text" placeholder="Suara SAH">
                                </div>
                                <br>
                            </form>
                            <button type="button" class="btn btn-primary proses">Submit</button>
                        </div>

                        <script>
                            // Define the desa options for each kecamatan
                            const desaOptions = {
                                'Wonosari': ['Wonosari', 'Kepek', 'Piyaman', 'Gari', 'Karangtengah', 'Selang', 'Baleharjo',
                                    'Siraman', 'Pulutan', 'Wareng', 'Duwet', 'Mulo', 'Wunung', 'Karangrejek'],
                                'Nglipar': ['Natah', 'Pilangrejo', 'Kedungpoh', 'Pengkol', 'Kedungkeris', 'Nglipar', 'Katongan'],
                                'Playen': ['Banyusoco', 'Plembutan', 'Bleberan', 'Getas', 'Dengok', 'Ngunut', 'Playen',
                                    'Ngawu', 'Bandung', 'Logandeng', 'Gading', 'Banaran', 'Ngleri'],
                                'Patuk': ['Bunder', 'Beji', 'Pengkok', 'Semoyo', 'Salam', 'Patuk', 'Ngoro-oro', 'Nglanggeran', 'Putat', 'Nglegi', 'Terbah'],
                                'Paliyan': ['Sodo', 'Pampang', 'Grogol', 'Karangduwet', 'Karangasem', 'Mulusan', 'Giring'],
                                'Panggang': ['Girikarto', 'Girisekar', 'Girimulyo', 'Giriwungu', 'Giriharjo', 'Girisuko'],
                                'Tepus': ['Giripanggung', 'Sumberwungu', 'Sidoharjo', 'Tepus', 'Purwodadi'],
                                'Semanu': ['Ngeposari', 'Semanu', 'Pacarejo', 'Candirejo', 'Dadapayu'],
                                'Karangmojo': ['Bejiharjo', 'Wiladeg', 'Bendungan', 'Kelor', 'Ngipak', 'Karangmojo', 'Gedangrejo', 'Ngawis', 'Jatiayu'],
                                'Ponjong': ['Umbulrejo', 'Sawahan', 'Tambakromo', 'Kenteng', 'Sumbergiri', 'Genjahan', 'Ponjong',
                                    'Karangasem', 'Bedoyo', 'Sidorejo', 'Gombang'],
                                'Rongkop': ['Bohol', 'Pringombo', 'Botodayaan', 'Petir', 'Pucanganom', 'Semugih', 'Melikan', 'Karangwuni'],
                                'Semin': ['Kalitekuk', 'Kemejing', 'Bulurejo', 'Sumberejo', 'Bendung', 'Candirejo', 'Rejosari', 'Karangsari', 'Pundungsari', 'Semin'],
                                'Ngawen': ['Tancep', 'Sambirejo', 'Jurangjero', 'Kampung', 'Beji', 'Watusigar'],
                                'Gedangsari': ['Hargomulyo', 'Mertelu', 'Watugajah', 'Sampang', 'Serut', 'Ngalang', 'Tegalrejo'],
                                'Saptosari': ['Krambilsawit', 'Ngloro', 'Jetis', 'Kepek', 'Kanigoro', 'Monggol', 'Planjan'],
                                'Girisubo': ['Balong', 'Jepitu', 'Karangawen', 'Nglindur', 'Jerukwudel', 'Tileng', 'Pucung', 'Songbanyu'],
                                'Tanjungsari': ['Hargosari', 'Kemiri', 'Kemadang', 'Banjarejo', 'Ngestirejo'],
                                'Purwosari': ['Giripurwo', 'Giricahyo', 'Girijati', 'Giriasih', 'Giritirto']
                            };

                            // Function to update desa options based on selected kecamatan
                            function updateDesaOptions() {
                                const kecamatan = document.getElementById('inputKecamatan').value;
                                const desaSelect = document.getElementById('inputDesa');
                                desaSelect.innerHTML = ''; // Clear existing options

                                // Add options based on selected kecamatan
                                desaOptions[kecamatan].forEach(option => {
                                    let optionElement = document.createElement('option');
                                    optionElement.textContent = option;
                                    desaSelect.appendChild(optionElement);

                                });
                            }
                            // Initial call to populate desa options on page load
                            updateDesaOptions();
                            // Event listener to update desa options when kecamatan selection changes
                            document.getElementById('inputKecamatan').addEventListener('change', updateDesaOptions);
                        </script>
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->


        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>