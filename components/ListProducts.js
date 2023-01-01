import { useSelector } from "react-redux";
import { useNavigate } from "react-router-dom";
import { selectProducts } from "../features/products/productsSlice";

const ListProducts = () => {
    const products = useSelector(selectProducts);
    const navigate = useNavigate()
    return (
        <div>
        <h3 className="text-center mt-5 fs-1">Our Product</h3>
        <div className="container grid-4 list-products">
        {products && products.map((prod, index) => (
        <div key={prod.id} className="best-sel-box" onClick={() => navigate('/detail/'+prod.id)}>
            <img src={prod.image} alt="best seller img" />
            <div className="breif-detail">
                <p>{prod.review} <i className="fa-solid fa-star"></i></p>
                <p>{prod.title}</p>
                <p>{prod.price}.00 $</p>
            </div>
        </div>
        ))
        }
        </div>
        </div>
    );
}

export default ListProducts;