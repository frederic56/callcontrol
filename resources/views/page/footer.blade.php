<div class="footer-container">
    <div class="footer-content">
        <div class="contact">
            <h2>Contactez-nous</h2>
            <ul>
                <li>
                    <iconify-icon icon="ep:message"></iconify-icon>
                    <p>exemple@email.com</p>
                </li>
                <li>
                    <iconify-icon icon="ic:round-phone-android"></iconify-icon>
                    <p>261-234-567-890</p>
                </li>
                <li>
                    <iconify-icon icon="ic:round-local-phone"></iconify-icon>
                    <p>261-987-654-321</p>
                </li>
                <li>
                    <iconify-icon icon="material-symbols:location-on-outline"></iconify-icon>
                    <p>NY HAVANA Antsahabe</p>
                </li>
            </ul>
        </div>

        <div class="service">
            <h2>Nos services</h2>
            <ul>
                <li>
                    <a href="#">Exemple de service</a>
                </li>
                <li>
                    <a href="#">Présentation de service</a>
                </li>
                <li>
                    <a href="#">Atout de la société</a>
                </li>
                <li>
                    <a href="#">Ouvrir mon entreprise</a>
                </li>
            </ul>
        </div>

        <div class="commentaire">
            <h2>Comments</h2>
            <p>Donner votre avis</p>
            <form action="{{ route('user-comment')}}" method="post" enctype="multipart/form-data">
                @csrf
                <p>Laisser votre commentaire ici
                    <a href="#collapseComment" role="button" data-bs-toggle="collapse">
                        <iconify-icon icon="mdi:comments-text-outline"></iconify-icon>
                    </a>
                </p>
                <div class="collapse" id="collapseComment">
                    <textarea name="comments" placeholder="Commentaires..." id="" cols="23" rows="5"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>

        </div>
    </div>
    <span class="copyright">
        copyright©callcontrol-2023
    </span>
</div>
