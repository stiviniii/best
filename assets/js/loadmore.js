import axios from "axios";

const loadMoreBtn = document.querySelector('.load-more');

if (typeof (loadMoreBtn) != 'undefined' && loadMoreBtn != null ) {

    loadMoreBtn.addEventListener('click', (e) => {

        let params = new URLSearchParams();
        params.append('action', 'load_more_posts');
        // params.append('current_page', current_page);

        axios.post('/wp-admin/admin-ajax.php', params)
        .then(res => {

          let posts_list = document.querySelector('.posts-list');

          posts_list.innerHTML += res.data.data;

          let getUrl = window.location;
          let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

          window.history.pushState('', '', baseUrl + 'page/' + (parseInt(document.querySelector('.posts-list').dataset.page) + 1));

          console.log(parseInt(document.querySelector('.posts-list').dataset.page));

          document.querySelector('.posts-list').dataset.page++;

          if (document.querySelector('.posts-list').dataset.page == document.querySelector('.posts-list').dataset.max) {
            button.parentNode.removeChild(button);
          }

        })
    });
}