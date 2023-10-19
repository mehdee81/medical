import { css, styled } from "styled-components";

const types = {
    primary: css`
        background-color: var(--color-green-500);
        color: var(--color-green-0);
        border: solid 2px var(--color-green-500);

        &:hover {
            background-color: var(--color-green-0);
            color: var(--color-green-500);
            border: solid 2px var(--color-green-500);
        }
    `,
    outline: css`
        background-color: inherit;
        color: var(--color-green-0);
        border: solid 2px var(--color-green-0);

        &:hover {
            border: solid 2px var(--color-green-0);
            background-color: var(--color-green-0);
            color: var(--color-green-600);
        }
    `,
};

const StyledButton = styled.button`
    display: flex;
    justify-content: center;
    align-items: center;
    height: 3rem;
    width: 15rem;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    font-weight: 1000;
    font-size: 1.2rem;
    transition: all 0.2s;

    ${(props) => types[props.type]}
`;

function Button({ children, type }) {
    return <StyledButton type={type}>{children}</StyledButton>;
}

export default Button;
