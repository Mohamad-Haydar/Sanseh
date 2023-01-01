const DealOfTheDay = () => {
    return (
        <div className="deal-of-the-day mt-5">
        <div className="container px-5 pt-5">
        <img src="images/Rectanglepink.png" alt="" className="rec-pink"/>
            <div className="content">
                <h3 className="mb-4 text-center fs-1">Deal of The Day</h3>
                <p className="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue erosget tincidunt </p>
                <div className="timer mb-4">
                <div className="white-box"><h3>08</h3><span>Days</span></div>
                <div className="white-box"><h3>09</h3><span>Hours</span></div>
                <div className="white-box"><h3>14</h3><span>Min</span></div>
                </div>
                <button className="deal-btn">Shop Now</button>
            </div>
            <div className="image">
                <img src="images/Image6.png" alt="girl" />
                <img src="images/points.png" alt="points" className="deal-dec"/>
            </div>
        </div>
        </div>
    );
}

export default DealOfTheDay;