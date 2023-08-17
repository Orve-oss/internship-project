<div id="profileModal" style="display: none;">
    <h2>Mon Profil</h2>
    <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_photo">

        <!-- Autres champs d'informations -->
        <button type="submit">Mettre à jour</button>
    </form>


    <script>
        document.getElementById('openProfile').addEventListener('click', function() {
            document.getElementById('profileModal').style.display = 'block';
        });
    </script>
</div>
