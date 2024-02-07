const Patient = (props) => {
    return (
        <>
        <h1>Patient Information</h1>
        <p>Name: {props.name}</p>
        <p>Age: {props.age}</p>
        {props.children}
        </>
    );
}
export default Patient;