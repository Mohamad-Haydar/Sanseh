import { useState } from "react";
import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";
import SettingPage from "./SettingPage";

const Navbar = () => {
    const [setting, setsetting] = useState(false)
    const navigate = useNavigate()
    const handleClick = () => {
        setsetting(prev => !prev)
    }
    const handlepage = (e) => {
        e.target.parentElement.parentElement.parentElement.childNodes.forEach(element => {
            element.style.color = '#34251F'
        });
        e.target.parentElement.parentElement.style.color= "#fff"
    }

    return (
        <div>

        <div className="desktop-nav">
            {/* yellow bar */}
            <div className="yello-bar">
                <h4>Shop Your Way To Confidence</h4>
                <div className="help">
                    <p className="p-help">Help</p>
                    <div className="change-lg">
                    <p>Change Language</p>
                    <img src="/images/eng.png" alt="english" />
                    </div>
                </div>
            </div>
            {/* navigation bar */}
            <div className="nav-bar">
            <div className="container">
                <div className="logo">
                <Link to={'/'}><img src="/images/sanseh.png" alt="sanseh logo" /></Link>
                </div>
                <div className="nav-items">
                    <ul>
                        <li><Link>Men</Link></li>
                        <li><Link>Woman</Link></li>
                        <li><Link>Kids</Link></li>
                        <li><Link>Collection</Link></li>
                        <li><Link>Trends</Link></li>
                    </ul>
                </div>
                <div className="setting-btn">
                    <button className="signup-btn">Sign Up</button>
                    <button className="login-btn" onClick={() => navigate('/login')}>Login</button>
                </div>
            </div>
            </div>
        </div>
        <div className="phone-nav">
            <ul>
            <Link to={"/"} onClick={(e) => handlepage(e)}>
                <li className="nav-icon" >
                    <i className="fa-solid fa-house"></i>
                </li>
            </Link>
            <Link onClick={(e) => handlepage(e)}>
                <li className="nav-icon">
                    <i className="fa-solid fa-heart"></i>
                </li>
            </Link>
            <Link onClick={(e) => handlepage(e)}>
                <li className="nav-icon">
                    <i className="fa-solid fa-boxes-stacked"></i>
                </li>
            </Link>
            <Link onClick={(e) => handlepage(e)}>
                <li className="nav-icon bars">
                    <i className="fa-solid fa-cart-shopping"></i>
                </li>
            </Link>
            <li className="nav-icon bars" onClick={handleClick}>
                <i className="fa-solid fa-bars"></i>
            </li>
            </ul>
        </div>

        <SettingPage setsetting={setsetting} setting={setting}/>

        </div>
    );
}

export default Navbar;