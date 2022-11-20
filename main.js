[...document.getElementsByClassName("images")[0].children].forEach(function(ele) {
    ele.onclick = function() {
        [...this.parentElement.children].forEach(function(e) {
            e.removeAttribute("class");
        });
        if(this == document.getElementsByClassName("images")[0].firstElementChild)
            document.getElementsByClassName("images")[0].previousElementSibling.firstElementChild.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/TN-17.svg/langfr-280px-TN-17.svg.png";
        else if(this == document.getElementsByClassName("images")[0].children[1])
            document.getElementsByClassName("images")[0].previousElementSibling.firstElementChild.src = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/cb/fb/2b/img-20190813-193236-largejpg.jpg?w=500&h=300&s=1";
        else 
            document.getElementsByClassName("images")[0].previousElementSibling.firstElementChild.src = "https://www.voyage-tunisie.info/wp-content/uploads/2017/12/La-m%C3%A9dina-de-Sfax4.jpg";
        this.className = "active";
    }
});