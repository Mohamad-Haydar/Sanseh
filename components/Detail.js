import { useParams } from "react-router-dom";
import Navbar from "./Navbar";

const Detail = () => {
    const { id } = useParams()

    return (
        <div>
            <Navbar />
            Detail
            {id}
        </div>
    );
}

export default Detail;