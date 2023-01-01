import { Link } from "react-router-dom";

const NotFound = () => {
    return ( 
        <div className="container mt-5 pt-5 text-center">
            <h1 className=" text-center">
                404... Not Found
            </h1>
            <Link to='/'>
                <button className="btn mt-5 not-found">
                    <i className="fa-solid fa-arrow-left fs-3"></i>
                    Back
                </button>
            </Link>

        </div>

    );
}

export default NotFound;