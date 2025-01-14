<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href=".css/profile.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lilita One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source Sans Pro:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Markazi Text:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Istok Web:ital,wght@0,700;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="profile">
      <header class="group-header">
        <div class="frame-child1092"></div>
        <img
          class="image-1-icon15"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <div class="frame-wrapper164">
          <div class="frame-parent424">
            <img
              class="frame-icon69"
              loading="lazy"
              alt=""
              src="./image/frame6.svg"
            />

            <div class="profile-wrapper">
              <h2 class="profile1">Profile</h2>
            </div>
          </div>
        </div>
        <div class="frame-wrapper165">
          <div class="frame-parent425">
            <img
              class="frame-icon70"
              alt=""
              src="./image/frame-12.svg"
              id="frame1"
            />

            <img
              class="vector-icon86"
              loading="lazy"
              alt=""
              src="./image/vector9.svg"
            />
          </div>
        </div>
      </header>
      <form class="frame-parent426">
        <div class="frame-parent427">
          <div class="alamat-email-parent">
            <div class="alamat-email">
              <div class="alamat-email1">Alamat Email</div>
            </div>
            <div class="rectangle-parent630">
              <div class="frame-child1093"></div>
              <div class="sadirazahragmailcom">sadirazahra@gmail.com</div>
            </div>
          </div>
          <div class="photo-container">
            <div class="nama-wrapper2">
              <div class="nama24">Nama</div>
            </div>
            <input
              class="photo-container-child"
              placeholder="Sadira Zahra"
              type="text"
            />
          </div>
          <div class="nomor-telepon-kata-sandi-parent">
            <div class="nomor-telepon-kata-sandi">
              <div class="nomor-telepon2">Nomor Telepon</div>
            </div>
            <input
              class="kata-sandi1"
              placeholder="0852426371827"
              type="text"
            />
          </div>
          <div class="frame-parent428">
            <div class="kata-sandi-wrapper">
              <div class="kata-sandi2">Kata Sandi</div>
            </div>
            <div class="rectangle-parent631">
              <div class="frame-child1094"></div>
              <div class="div49">******</div>
            </div>
          </div>
        </div>
        <main class="rectangle-parent632">
          <section class="rectangle-section"></section>
          <img
            class="photo-by-oleg-ivanov4"
            loading="lazy"
            alt=""
            src="./image/photo-by-oleg-ivanov1@2x.png"
          />
        </main>
        <div class="frame-wrapper166">
          <button class="rectangle-parent633" id="groupButton">
            <div class="frame-child1095"></div>
            <b class="edit-profile">Edit Profile</b>
          </button>
        </div>
        <div class="frame1"></div>
      </form>
    </div>

    <script>
      var frame1 = document.getElementById("frame1");
      if (frame1) {
        frame1.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          // Please sync "Profile (gausa)" to the project
        });
      }
      </script>
  </body>
</php>
