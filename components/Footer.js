const Footer = () => {
    return (
        <div className="footer">
            <div className="container grid-4">

                <div className="about">
                    <h4 className="mb-4">About</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros, eget tincidunt ipsum eleifend ut. </p>
                    <h4>PAYMENT METHODS</h4>
                    <div className="payment">
                        <img src="/images/payment1.png" alt="" />
                        <img src="/images/payment2.png" alt="" />
                        <img src="/images/payment3.png" alt="" />
                    </div>
                </div>

                <div className="categories">
                <h4>CATEGORIES</h4>
                    <ul>
                        <li>Female fashion</li>
                        <li>Male fashion</li>
                        <li>Jewelry & Watches</li>
                        <li>Bags & Shoes</li>
                    </ul>
                </div>

                <div className="information">
                <h4>INFORMTION</h4>
                    <ul>
                        <li>About Us</li>
                        <li>Contact Us</li>
                        <li>Terms & Condition</li>
                        <li>Return & Exchange</li>
                        <li>Shipping & Delivery</li>
                    </ul>
                </div>

                <div className="contact">
                    <h4 className="mb-4">Contact</h4>
                    <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                    <h4>JOIN US ON</h4>
                    <div className="payment">
                        <img src="/images/link1.png" alt="" />
                        <img src="/images/link2.png" alt="" />
                        <img src="/images/link3.png" alt="" />
                        <img src="/images/link4.png" alt="" />
                    </div>
                </div>

            </div>
        </div>
    );
}

export default Footer;