import { useEffect, useRef, useState } from "react";
import { RingLoader } from "react-spinners";
import { Link } from "react-router-dom";
import { useSelector } from "react-redux";
import { selectCategory } from "../features/category/categorySlice";

const Category = () => {
    const category = useSelector(selectCategory)
    const CAT = useRef(null)

    useEffect(() => {
        window.addEventListener('scroll', () => {
            CAT.current.querySelectorAll('.box').forEach(element => {
            if(element.getBoundingClientRect().top < 500){
                element.classList.add('animate')
            }else{
                element.classList.remove('animate')
            }
            });
        })
    })

    return (
        <div className="category mt-5">
        <div className="container mb-3">
            <h2 className="main-head text-center mt-5 mb-2">Category</h2>
            <p className="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros</p>
            <div className="row" ref={CAT}>
                {category && category.map((cat, index) => (
                    <div className="col col-6 col-lg-4 box" key={index}>
                        <Link to={'/category/'+cat.title} >
                            <img src={cat.image} alt={cat.title} />
                            <button className="cat-btn">{cat.title}</button>
                        </Link>
                    </div>
                ))}
                {category && <div className="">
                    <img src="images/RectanglePink.png" alt="pink rec" className="pink-box"/>
                    <img src="images/points.png" alt="points" className="pink-box"/>
                </div>}
                {!category && 
                    <RingLoader color="#F69F21" className="loading"/>
                }
            </div>
        </div>
        </div>
    );
}

export default Category;