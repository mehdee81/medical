import { css, styled } from "styled-components";

const types = {
    h1: css`
        font-size: 2rem;
        font-weight: 800;
    `,

    h2: css`
        font-size: 1.4rem;
        font-weight: 800;
    `,
};

const SubHeading = styled.p`
    ${(props) => types[props.type]}
    color: ${(props) =>
        props.color === "light"
            ? "var(--color-green-200)"
            : "var(--color-green-400)"};
`;

export default SubHeading;
