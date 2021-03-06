jQuery(document).ready(function ($) {
  const templates = {
    post: data => `
<div class="col-12 col-md-4 py-2 loadmore-item fade">
    <div class="blog-post-tile hover-shadow">
        <div class="post-image" style="background-image: url('${data.image}')">
        </div>

        <div class="post-date d-flex flex-row">
            <h1 class="post-day">${data.date}</h1>
            <div class="post-date-right d-flex flex-column justify-content-center">
                <h4 class="post-year">${data.year}</h4>
                <h4 class="post-month">${data.month}</h4>
            </div>
        </div>

        <h4 class="col-12">${data.title || ""}</h4>

        <section class="col-12">
            <p>${data.excerpt || ""}</p>
        </section>

        <a href="${data.link}" class="grow-button">Read More</a>
    </div>
</div>
`,
    review: data => `
<div class="col-10 my-2 loadmore-item fade">
    <div class="hover-shadow review p-4">
        <h5 class="font-weight-bold">${data.title || ""}</h5>

        <section class="text-center">
            <p>${data.content || ""}</p>
        </section>
    </div>
</div>
`
  };

  $(".loadmore-button").click(function (e) {
    const trigger = $(e.target);
    const container = $(".loadmore-container");
    const offset = container.find(".loadmore-item").length;
    const {ajaxurl} = wp_params; // global object from server side
    trigger.text("Loading");

    let posttype = container.data("posttype") || "post";
    let tax_query = [{
      taxonomy: "category",
      field: "slug",
      terms: ["reviews"],
      operator: "NOT IN",
    }];
    if(posttype === "review") {
      tax_query = [{
        taxonomy: "category",
        field: "slug",
        terms: ["reviews"],
      }];
    }
    $.ajax({
      url: ajaxurl,
      type: "post",
      json: true,
      data: {
        action: "get_posts",
        offset,
        tax_query,
        order: "DESC",
        count: 3
      },
      success: data => {
        trigger.text("Load More");
        if (!data) return;
        if (data.length < 3) trigger.remove();
        if (!data.length) return;
        const tpl = templates[posttype] || templates["post"];
        data.forEach(post => container.append(tpl(post)));
        setTimeout(() => container.find(".loadmore-item").addClass("show"), 100);
      },
      error: () => {
        trigger.text("Load More");
      },
    });
  });
});
