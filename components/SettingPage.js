import { Link } from "react-router-dom";

const SettingPage = ({setsetting,setting}) => {

    const handleBack = () => {
        setsetting(prev => !prev)
    }

    return (
        <div className="setting-page"  style={ !setting ? { transform: 'translateX(100%)' } : { transform: 'translateX(0%)' }}>
            <div className="setting-head">
                <div className="setting-top">
                    <i className="fa-solid fa-angle-left" onClick={handleBack}/>
                    <h2>Setting</h2>
                </div>

                <div className="personal-info">
                    <div className="name-image">
                        <img src="/images/person.jpg" alt="face" />
                        <div className="info">
                            <h2 className="name">Cameron Williamson</h2>
                            <Link>View Profile</Link>
                        </div>
                    </div>
                    <div className="pen">
                        <i className="fa-solid fa-pen"></i>
                    </div>
                    
                </div>
                
            </div>
            <div className="setting-body">
                <ul>
                    <li className="one-setting">
                        <img src="/images/cup.png" alt="" />
                        <h3>My Orders</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/bell.png" alt="" />
                        <h3>Notification</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/boxes.png" alt="" />
                        <h3>Manage Address</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/wallet.png" alt="" />
                        <h3>Manage Payment</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/bulb.png" alt="" />
                        <h3>Change Language</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/help.png" alt="" />
                        <h3>Help</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/database.png" alt="" />
                        <h3>Referal</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/upload.png" alt="" />
                        <h3>Rate App</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/use.png" alt="" />
                        <h3>Term of Use</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                    <li className="one-setting">
                        <img src="/images/fishbox.png" alt="" />
                        <h3>Privacy Policy</h3>
                        <i className="fa-solid fa-angle-right"></i>
                    </li>
                </ul>
                <h3>Logout</h3>
            </div>
        </div>
    );
}

export default SettingPage;