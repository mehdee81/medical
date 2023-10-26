import { styled } from "styled-components";

import Search from "../../ui/Search";
import Heading from "./../../ui/Heading";
import SubHeading from "./../../ui/SubHeading";
import FilterTabs from "../../ui/FilterTabs";

const StyledPanel = styled.div`
    display: grid;
    grid-template-columns: 6fr 1fr;
    column-gap: 1.5rem;
    padding: 1rem;
    height: 100dvh;
`;

const Main = styled.div`
    background-color: var(--color-green-0);
    border-radius: 2rem;
    padding: 2rem 4rem;
`;

const Header = styled.div`
    display: grid;
    align-items: center;
    grid-template-columns: 1.5fr 1fr;
`;

const SideBar = styled.div`
    background-color: var(--color-green-400);
    border-radius: 0 2rem 2rem 0;
`;

const usersTabs = [
    {
        name: "همه",
        value: "all",
        active: false,
    },
    {
        name: "داروخانه ها",
        value: "pharmacies",
        active: true,
    },
    {
        name: "بیماران",
        value: "patients",
        active: false,
    },
    {
        name: "دکتر ها",
        value: "doctors",
        active: false,
    },
    {
        name: "نامشخص",
        value: "unknowns",
        active: false,
    },
];

function Admin() {
    return (
        <StyledPanel>
            <Main>
                <Header>
                    <Search />
                    <div>
                        <Heading type="h2">کاربران</Heading>
                        <SubHeading type="h2">کاربری وجود ندارد</SubHeading>
                    </div>
                </Header>
                <FilterTabs tabs={usersTabs} />
            </Main>
            <SideBar></SideBar>
        </StyledPanel>
    );
}

export default Admin;
