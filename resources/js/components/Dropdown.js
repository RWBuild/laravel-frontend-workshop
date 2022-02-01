import ReactDOM from "react-dom";

const Dropdown = () => {
    return (
        <div className="">
            <div className="flex flex-col">
                <a>Dashboard</a>
                <a>Logout</a>
            </div>
        </div>
    );
};

if (document.querySelector("#dropdown")) {
    ReactDOM.render(<Dropdown />, document.querySelector("#dropdown"));
}

export default Dropdown;
