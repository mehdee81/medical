import { HiOutlineCog6Tooth } from "react-icons/hi2";
import { styled } from "styled-components";
import { usersHeadersList } from "../constants/tablesHeaders";

const bodyList = [
    {
        name: "تست تست",
        national_code: 1234567890,
        province: "تست",
        city: "تست",
        age: 20,
        father_name: "تست",
        role: "تست",
    },
    {
        name: "تست تست",
        national_code: 1234567890,
        province: "تست",
        city: "تست",
        age: 20,
        father_name: "تست",
        role: "تست",
    },
    {
        name: "تست تست",
        national_code: 1234567890,
        province: "تست",
        city: "تست",
        age: 20,
        father_name: "تست",
        role: "تست",
    },
];

const StyledTable = styled.div`
    height: 10rem;
    direction: rtl;
`;

const Header = styled.div`
    display: grid;
    grid-template-columns: 4fr 3fr 2fr 2fr 2fr 2fr 2fr 1fr;
    background-color: var(--color-green-100);
    font-size: 1.2rem;
    font-weight: 800;
    color: var(--color-grey-500);
    padding: 2rem;
`;

const Body = styled.div`
    margin: 1rem 0;
`;

const BodyRow = styled.div`
    display: grid;
    grid-template-columns: 4fr 3fr 2fr 2fr 2fr 2fr 2fr 1fr;
    border: solid 2px var(--color-green-200);
    border-radius: 1.2rem;
    padding: 2rem;
    margin: 1rem 0;
    color: var(--color-grey-400);
    font-size: 1.2rem;
    font-weight: 500;
`;

function Table() {
    return (
        <StyledTable>
            <Header>
                {usersHeadersList.map((i) => (
                    <p key={i}>{i}</p>
                ))}
            </Header>
            <Body>
                {bodyList.map((item, i) => (
                    <BodyRow key={item.national_code}>
                        <p>{item.name}</p>
                        <p>{item.national_code}</p>
                        <p>{item.province}</p>
                        <p>{item.city}</p>
                        <p>{item.age}</p>
                        <p>{item.father_name}</p>
                        <p>{item.role}</p>
                        <HiOutlineCog6Tooth
                            strokeWidth="2"
                            color="var(--color-green-400)"
                            size={20}
                        />
                    </BodyRow>
                ))}
            </Body>
        </StyledTable>
    );
}

export default Table;
