const NewsLetter = () => {
    return (
        <div className="mt-5 news-letter py-5 px-3 text-center">
            <h3 className="my-4">Sign Up For Newsletter</h3>
            <p className="mb-4">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis </p>
            <form className="subscribe-form">
                <input type="text" placeholder="email?"/>
                <button className="subscribe-btn">Subscribe</button>
            </form>
        </div>
    );
}

export default NewsLetter;