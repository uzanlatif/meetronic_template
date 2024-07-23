<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display JSON Data in HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .kecamatan {
            margin-bottom: 10px;
        }
        .desa {
            margin-left: 20px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div id="dataContainer"></div>

    <script>
        // Fetch data from local JSON file
        fetch('dummy/dummy-data.json')
            .then(response => response.json())
            .then(data => {
                console.log(data); // Log data to console (optional)

                // Get reference to container element
                const dataContainer = document.getElementById('dataContainer');

                // Display Kabupaten
                const kabupatenDiv = document.createElement('div');
                kabupatenDiv.classList.add('container');
                kabupatenDiv.innerHTML = `<h2>Kabupaten: ${data.kabupaten}</h2>`;
                dataContainer.appendChild(kabupatenDiv);

                // Display each Kecamatan
                data.kecamatan.forEach(kecamatan => {
                    const kecamatanDiv = document.createElement('div');
                    kecamatanDiv.classList.add('kecamatan');
                    kecamatanDiv.innerHTML = `<h3>Kecamatan: ${kecamatan.nama}</h3>`;
                    kabupatenDiv.appendChild(kecamatanDiv);

                    // Display each Desa within the Kecamatan
                    kecamatan.desa.forEach(desa => {
                        const desaDiv = document.createElement('div');
                        desaDiv.classList.add('desa');
                        desaDiv.innerHTML = `
                            <p>Desa: ${desa.nama}</p>
                            <p>Suara 1: ${desa['suara 1']}</p>
                            <p>Suara 2: ${desa['suara 2']}</p>
                            <p>Suara 3: ${desa['suara 3']}</p>
                        `;
                        kecamatanDiv.appendChild(desaDiv);
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script>
</body>
</html>
