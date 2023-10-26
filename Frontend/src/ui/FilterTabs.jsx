import { styled } from "styled-components";

const StyledFilterTabs = styled.div`
    display: flex;
    column-gap: 1rem;
    direction: rtl;
    margin: 4.5rem 0;
    column-gap: 4rem;
`;

const Tab = styled.span`
    font-weight: 1000;
    font-size: 1.2rem;
    border-bottom: ${(props) =>
        props.active && "solid 2px var(--color-green-600)"};
    color: ${(props) =>
        props.active ? "var(--color-grey-500)" : "var(--color-grey-300)"};
`;

function FilterTabs({ tabs }) {
    return (
        <StyledFilterTabs>
            {tabs.map((tab) => (
                <Tab active={tab.active} key={tab.value}>
                    {tab.name}
                </Tab>
            ))}
        </StyledFilterTabs>
    );
}

export default FilterTabs;
