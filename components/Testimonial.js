import Slider from "react-slick";
import { Component } from "react";

const Testimonial = () => {

    const names = ["Mohamad", "Anisa Zahra", "Melissa Wallace", "Mohamad", "Anisa Zahra", "Melissa Wallace"]

    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
    };

    class CustomSlide extends Component {
        render() {
        const { name, index, ...props } = this.props;
        return (
        <div className="testimonial-box" >
            <div className="breif-detail">
                <h5 className="testimonial-title">Comfortable and met all my expectations! I ordered a medium and it fit perfectly</h5>
                <p className="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacus, auctor pretium ac ultrices. Dui lacus dignissim tincidunt urna, at enim tempo. Pellentesque amet Lorem ipsum dolor sit amet, </p>
            </div>
            <div className="person">
                <img src={"images/Image"+index+".png"} alt="best seller img" />
                <p className="person-name">{name}</p>
                <p className="person-detail">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        );
        }
    }


    return (
        <div className=" mt-5 testemonial">
            <h1 className="mb-2 text-center">What People Say About Us</h1>
            <p className="mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros</p>
            <Slider {...settings}>
                {names.map((name, index) => (<CustomSlide name={name} index={index + 1} key={index}/>))}
            </Slider>
        </div>
    );
}

export default Testimonial;