import Slider from "react-slick";

const FolowINstagram = () => {
    const settings = {
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 3,
    };

    const table = []

    for(let i = 1; i <= 5; i++){
        table.push(<img src={`/images/${i}.png`} alt="person" key={i} className="instagram-images"/>)
    }

    return (
        <div className="my-5 text-center instagramm">
            <Slider {...settings}>{table}</Slider>
            <div className="insta-link">Follow our Instagram: <a href="www.google.com">@Noname</a></div>
        </div>
    );
}

export default FolowINstagram;