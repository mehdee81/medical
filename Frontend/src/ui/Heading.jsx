import { css, styled } from "styled-components";

const types = {
    h1: css`
        font-size: 4.5rem;
        font-weight: 1000;
    `,
    h2: css`
        font-size: 3.2rem;
        font-weight: 800;
    `,
};

const Heading = styled.p`
    ${(props) => types[props.type]}
    color: ${(props) =>
        props.color === "light"
            ? "var(--color-green-0)"
            : "var(--color-green-600)"};
`;

export default Heading;
